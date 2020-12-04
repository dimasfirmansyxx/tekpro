using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Start_InputNama
{
    public partial class Start_InputNama : Form
    {
        public Start_InputNama()
        {
            InitializeComponent();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void Start_InputNama_Load(object sender, EventArgs e)
        {
            pictureBoxSetting.Parent = pictureBoxNavUp;
            pictureBoxHome.Parent = pictureBoxNavUp;

            
            panel1.Parent = pictureBoxBackground;
            panel1.BackColor = Color.FromArgb(100, 0, 0, 0); 
        }

        private void textBoxNama_Click(object sender, EventArgs e)
        {
            if (textBoxNama.Text == "Enter your name")
            {
                textBoxNama.Text = "";

                textBoxNama.ForeColor = Color.Black;
            }
        }
    }
}
