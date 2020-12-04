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
    public partial class password : Form
    {
        public password()
        {
            InitializeComponent();
        }

        private void password_Load(object sender, EventArgs e)
        {
            var posi = this.PointToScreen(panel1.Location);
            posi = pictureBox1.PointToClient(posi);
            panel1.Parent = pictureBox1;
            panel1.Location = posi;
            panel1.BackColor = Color.FromArgb(100, 0, 0, 0);
        }
    }
}
