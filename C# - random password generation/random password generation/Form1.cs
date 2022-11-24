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
            //  Random() rastgele say� �retmek icin kullan�r.


            if (comboBox1.SelectedIndex >= 0)
            {
                switch(comboBox1.SelectedIndex)
                {
                    case 0: zorluk = new int[] {65,80};  break;
                    case 1: zorluk = new int[] {65,91};  break;
                    case 2: zorluk = new int[] {65,100}; break;
                    case 3: zorluk = new int[] {33,64};  break;
                    case 4: zorluk = new int[] {58,122}; break;
                    // ASCII kod tablosundaki kod kars�l�g�na g�re karakter kodlar�n� verir.
                }

                for (int i = 0; i < numericUpDown1.Value; i++)
                {
                    sifre = random.Next(zorluk[0], zorluk[1]); //ASCII tablosundan rastgele bir karakter se�iyoruz.
                    // ve  random olarak atanan de�erle birlikte Next() fonksiyonu kullan�l�r.
                    karakter += Convert.ToChar(sifre);
                }

                textBox1.Text = karakter; //karakter de�iskene atanan veriler textbox1'e yazd�r�l�r.

            }

            else
            {
                MessageBox.Show("Zorluk seviyesini se�melisiniz.");
            }




        }

    }
}