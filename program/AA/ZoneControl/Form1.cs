using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using System.IO;
using MySql.Data.MySqlClient;

namespace ZoneControl
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {
            var serverKapcsolat = new MySqlConnectionStringBuilder { Server = "127.0.0.1", Database = "", UserID = "root", Password = "mysql" };
            MySqlConnection kapcsolat;
            kapcsolat = new MySqlConnection(serverKapcsolat.ConnectionString);
            kapcsolat.Open();
            var lekerdezes = kapcsolat.CreateCommand();


            lekerdezes.CommandText = "DROP DATABASE IF EXISTS zonecontrol;";

            var olvaso = lekerdezes.ExecuteReader();
            olvaso.Close();

            lekerdezes.CommandText = "CREATE DATABASE zonecontrol\r\nCHARACTER SET utf8mb4\r\nCOLLATE utf8mb4_hungarian_ci;";
            olvaso = lekerdezes.ExecuteReader(); 
            olvaso.Close();
            
            lekerdezes.CommandText = "USE zonecontrol;";
            olvaso = lekerdezes.ExecuteReader();
            olvaso.Close();


        }
    }
}
