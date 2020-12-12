using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.Linq;
using System.Web;

namespace RestauranteMexicano.Models
{
    public class DefaultConnectionDB : IDisposable
    {
        private readonly MySqlConnection DefaultConnection;

        public DefaultConnectionDB()
        {
            DefaultConnection = new MySqlConnection(ConfigurationManager.ConnectionStrings["DefaultConnection"].ConnectionString);
            DefaultConnection.Open();
        }

        public void ExecutaComando(string StrQuer)
        {
            var vComando = new MySqlCommand
            {
                CommandText = StrQuer,
                CommandType = System.Data.CommandType.Text,
                Connection = DefaultConnection
            };
            vComando.ExecuteNonQuery();
        }

        public MySqlDataReader RetornaRegistro(string StrQuer)
        {
            var vComando = new MySqlCommand
            {
                CommandText = StrQuer,
                CommandType = System.Data.CommandType.Text,
                Connection = DefaultConnection
            };
            return vComando.ExecuteReader();
        }

        public string RetornaDado(string StrQuer)
        {
            var vComando = new MySqlCommand
            {
                CommandText = StrQuer,
                CommandType = System.Data.CommandType.Text,
                Connection = DefaultConnection
            };
            return vComando.ExecuteScalar().ToString();
        }

        public void Dispose()
        {
            if (DefaultConnection.State == System.Data.ConnectionState.Open)
                DefaultConnection.Close();

        }
    }
}