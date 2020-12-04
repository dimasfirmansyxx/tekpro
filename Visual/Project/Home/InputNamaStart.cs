using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Home
{
    public partial class InputNamaStart : Form
    {
        public InputNamaStart()
        {
            InitializeComponent();
        }

        private void InputNamaStart_Load(object sender, EventArgs e)
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
