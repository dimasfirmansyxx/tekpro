namespace Home
{
    partial class Home
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(Home));
            this.pictureBoxSetting = new System.Windows.Forms.PictureBox();
            this.pictureBoxExit = new System.Windows.Forms.PictureBox();
            this.pictureBoxLeaderboard = new System.Windows.Forms.PictureBox();
            this.pictureBoxStart = new System.Windows.Forms.PictureBox();
            this.pictureBoxNavUp = new System.Windows.Forms.PictureBox();
            this.pictureBoxNavDown = new System.Windows.Forms.PictureBox();
            this.pictureBoxTitle = new System.Windows.Forms.PictureBox();
            this.pictureBoxBackground = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxSetting)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxExit)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxLeaderboard)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxStart)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxNavUp)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxNavDown)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxTitle)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxBackground)).BeginInit();
            this.SuspendLayout();
            // 
            // pictureBoxSetting
            // 
            this.pictureBoxSetting.BackColor = System.Drawing.Color.Transparent;
            this.pictureBoxSetting.Image = global::Home.Properties.Resources.Setting_icon;
            this.pictureBoxSetting.Location = new System.Drawing.Point(1321, 7);
            this.pictureBoxSetting.Name = "pictureBoxSetting";
            this.pictureBoxSetting.Size = new System.Drawing.Size(91, 63);
            this.pictureBoxSetting.TabIndex = 12;
            this.pictureBoxSetting.TabStop = false;
            // 
            // pictureBoxExit
            // 
            this.pictureBoxExit.Image = global::Home.Properties.Resources.Exit1;
            this.pictureBoxExit.Location = new System.Drawing.Point(547, 444);
            this.pictureBoxExit.Name = "pictureBoxExit";
            this.pictureBoxExit.Size = new System.Drawing.Size(367, 106);
            this.pictureBoxExit.TabIndex = 10;
            this.pictureBoxExit.TabStop = false;
            // 
            // pictureBoxLeaderboard
            // 
            this.pictureBoxLeaderboard.Image = global::Home.Properties.Resources.Leaderboard1;
            this.pictureBoxLeaderboard.Location = new System.Drawing.Point(547, 329);
            this.pictureBoxLeaderboard.Name = "pictureBoxLeaderboard";
            this.pictureBoxLeaderboard.Size = new System.Drawing.Size(367, 106);
            this.pictureBoxLeaderboard.TabIndex = 9;
            this.pictureBoxLeaderboard.TabStop = false;
            // 
            // pictureBoxStart
            // 
            this.pictureBoxStart.Image = global::Home.Properties.Resources.Start1;
            this.pictureBoxStart.Location = new System.Drawing.Point(547, 210);
            this.pictureBoxStart.Name = "pictureBoxStart";
            this.pictureBoxStart.Size = new System.Drawing.Size(367, 106);
            this.pictureBoxStart.TabIndex = 8;
            this.pictureBoxStart.TabStop = false;
            // 
            // pictureBoxNavUp
            // 
            this.pictureBoxNavUp.BackColor = System.Drawing.Color.Transparent;
            this.pictureBoxNavUp.Image = ((System.Drawing.Image)(resources.GetObject("pictureBoxNavUp.Image")));
            this.pictureBoxNavUp.Location = new System.Drawing.Point(0, 0);
            this.pictureBoxNavUp.Name = "pictureBoxNavUp";
            this.pictureBoxNavUp.Size = new System.Drawing.Size(1485, 77);
            this.pictureBoxNavUp.TabIndex = 5;
            this.pictureBoxNavUp.TabStop = false;
            // 
            // pictureBoxNavDown
            // 
            this.pictureBoxNavDown.BackColor = System.Drawing.Color.Transparent;
            this.pictureBoxNavDown.Image = global::Home.Properties.Resources.Rectangle_39_reversed_1;
            this.pictureBoxNavDown.Location = new System.Drawing.Point(0, 579);
            this.pictureBoxNavDown.Name = "pictureBoxNavDown";
            this.pictureBoxNavDown.Size = new System.Drawing.Size(1485, 76);
            this.pictureBoxNavDown.TabIndex = 6;
            this.pictureBoxNavDown.TabStop = false;
            // 
            // pictureBoxTitle
            // 
            this.pictureBoxTitle.BackColor = System.Drawing.Color.Transparent;
            this.pictureBoxTitle.Image = global::Home.Properties.Resources.Untitled_1;
            this.pictureBoxTitle.Location = new System.Drawing.Point(498, 93);
            this.pictureBoxTitle.Name = "pictureBoxTitle";
            this.pictureBoxTitle.Size = new System.Drawing.Size(459, 111);
            this.pictureBoxTitle.TabIndex = 4;
            this.pictureBoxTitle.TabStop = false;
            this.pictureBoxTitle.Click += new System.EventHandler(this.pictureBox1_Click_1);
            // 
            // pictureBoxBackground
            // 
            this.pictureBoxBackground.BackColor = System.Drawing.Color.Transparent;
            this.pictureBoxBackground.Image = global::Home.Properties.Resources.wallpaper_1366x7201;
            this.pictureBoxBackground.Location = new System.Drawing.Point(-11, 20);
            this.pictureBoxBackground.Name = "pictureBoxBackground";
            this.pictureBoxBackground.Size = new System.Drawing.Size(1529, 632);
            this.pictureBoxBackground.TabIndex = 7;
            this.pictureBoxBackground.TabStop = false;
            // 
            // Home
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1485, 654);
            this.Controls.Add(this.pictureBoxSetting);
            this.Controls.Add(this.pictureBoxExit);
            this.Controls.Add(this.pictureBoxLeaderboard);
            this.Controls.Add(this.pictureBoxStart);
            this.Controls.Add(this.pictureBoxNavUp);
            this.Controls.Add(this.pictureBoxNavDown);
            this.Controls.Add(this.pictureBoxTitle);
            this.Controls.Add(this.pictureBoxBackground);
            this.Name = "Home";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Home";
            this.Load += new System.EventHandler(this.Form1_Load);
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxSetting)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxExit)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxLeaderboard)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxStart)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxNavUp)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxNavDown)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxTitle)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pictureBoxBackground)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion
        private System.Windows.Forms.PictureBox pictureBoxTitle;
        private System.Windows.Forms.PictureBox pictureBoxNavUp;
        private System.Windows.Forms.PictureBox pictureBoxNavDown;
        private System.Windows.Forms.PictureBox pictureBoxBackground;
        private System.Windows.Forms.PictureBox pictureBoxStart;
        private System.Windows.Forms.PictureBox pictureBoxLeaderboard;
        private System.Windows.Forms.PictureBox pictureBoxExit;
        private System.Windows.Forms.PictureBox pictureBoxSetting;
    }
}

