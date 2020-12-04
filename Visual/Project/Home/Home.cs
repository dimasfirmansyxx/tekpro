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
    public partial class Home : Form
    {
        public Home()
        {
            InitializeComponent();
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {

        }

        private void pictureBox1_Click_1(object sender, EventArgs e)
        {
            
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            pictureBoxSetting.Parent = pictureBoxNavUp;
            
            pictureBoxTitle.Parent = pictureBoxBackground;
            pictureBoxStart.Parent = pictureBoxBackground;
            pictureBoxExit.Parent = pictureBoxBackground;
            pictureBoxLeaderboard.Parent = pictureBoxBackground;
            
        }
    }
}
