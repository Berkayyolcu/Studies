namespace Kronometre_Yapımı
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void start(object sender, EventArgs e)
        {
            timer1.Start(); // baslat
        }


        int saat = 0;
        int dakika = 0;
        int saniye = 0;
        int salise = 0;
        private void timer1_Tick(object sender, EventArgs e)
        {
            /*int deger = Convert.ToInt16(label1.Text);
            deger++;
            label1.Text = deger.ToString();*/

            salise++;
     
            if (salise == 9)
            {
                salise = 0; //sıfırlar
                saniye++;  //arttır
            }

            if (saniye == 60)
            {
                saniye = 0; //sıfırlar
                dakika++;   //arttır
            }

            if (dakika == 60)
            {
                dakika = 0; //sıfırlar
                saat++;     //arttır
            }

            label1.Text= saat.ToString();
            label2.Text = dakika.ToString();
            label3.Text = saniye.ToString();
            label4.Text = salise.ToString();
        }

        private void stop(object sender, EventArgs e)
        {
            timer1.Stop(); //durdur
        }

        private void reset(object sender, EventArgs e)
        {
            timer1.Stop(); //durdur ve
            saat = 0;   //sıfırla
            dakika = 0; //sıfırla
            saniye = 0;  //sıfırla
            salise = 0;  //sıfırla
            label1.Text = saat.ToString();   // sıfırlamalar reset butona basınca label'de yansır
            label2.Text = dakika.ToString(); // sıfırlamalar reset butona basınca label'de yansır
            label3.Text = saniye.ToString(); // sıfırlamalar reset butona basınca label'de yansır
            label4.Text = salise.ToString(); // sıfırlamalar reset butona basınca label'de yansır

        }
    }
}