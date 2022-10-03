using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApp5
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {
            int a, b, toplam; 
            a = Convert.ToInt32(textBox1.Text);
            b = Convert.ToInt32(textBox2.Text);
            toplam = a + b;
            label3.Text = toplam.ToString();
        }

        private void button2_Click(object sender, EventArgs e)
        {
            int a, b, toplam;
            a = Convert.ToInt32(textBox1.Text);
            b = Convert.ToInt32(textBox2.Text);
            toplam = a - b;
            label3.Text = toplam.ToString();
        }

        private void button3_Click(object sender, EventArgs e)
        {
            int a, b, toplam;
            a = Convert.ToInt32(textBox1.Text);
            b = Convert.ToInt32(textBox2.Text);
            toplam = a * b;
            label3.Text = toplam.ToString();
        }

        private void button4_Click(object sender, EventArgs e)
        {
            int a, b, toplam;
            a = Convert.ToInt32(textBox1.Text);
            b = Convert.ToInt32(textBox2.Text);
            toplam = a / b;
            label3.Text =toplam.ToString();
        }
    }
}
