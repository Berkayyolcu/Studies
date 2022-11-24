using System;

namespace random_password_generation
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }


        int[] zorluk;
        private void button1_Click(object sender, EventArgs e)
        {
            textBox1.Text = "";
            int sifre;
            String karakter = "";

            Random random = new Random();
            //  Random() rastgele sayý üretmek icin kullanýr.


            if (comboBox1.SelectedIndex >= 0)
            {
                switch(comboBox1.SelectedIndex)
                {
                    case 0: zorluk = new int[] {65,80};  break;
                    case 1: zorluk = new int[] {65,91};  break;
                    case 2: zorluk = new int[] {65,100}; break;
                    case 3: zorluk = new int[] {33,64};  break;
                    case 4: zorluk = new int[] {58,122}; break;
                    // ASCII kod tablosundaki kod karsýlýgýna göre karakter kodlarýný verir.
                }

                for (int i = 0; i < numericUpDown1.Value; i++)
                {
                    sifre = random.Next(zorluk[0], zorluk[1]); //ASCII tablosundan rastgele bir karakter seçiyoruz.
                    // ve  random olarak atanan deðerle birlikte Next() fonksiyonu kullanýlýr.
                    karakter += Convert.ToChar(sifre);
                }

                textBox1.Text = karakter; //karakter deðiskene atanan veriler textbox1'e yazdýrýlýr.

            }

            else
            {
                MessageBox.Show("Zorluk seviyesini seçmelisiniz.");
            }




        }

    }
}