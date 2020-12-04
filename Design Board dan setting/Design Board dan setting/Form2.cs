using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Design_Board_dan_setting
{
    public partial class Form2 : Form
    {
        public Form2()
        {
            InitializeComponent();
        }

        private void Form2_Load(object sender, EventArgs e)
        {
            var posi = this.PointToScreen(panel1.Location);
            posi = pictureBox1.PointToClient(posi);
            panel1.Parent = pictureBox1;
            panel1.Location = posi;
            panel1.BackColor = Color.FromArgb(100, 0, 0, 0);
        }
    }
}
