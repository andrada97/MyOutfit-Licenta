using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.ML.Data;


namespace WebApiPred.DataModels
{
    public class TempData
    {
        [LoadColumn(0)]
        [ColumnName("lon")]
        public float Lon;


        [LoadColumn(1)]
        [ColumnName("lat")]
        public float Lat;


        [LoadColumn(2)]
        [ColumnName("Label")]
        public float Temp;


        [LoadColumn(3)]
        [ColumnName("pressure")]
        public float Pressure;


        [LoadColumn(4)]
        [ColumnName("humidity")]
        public float Humidity;


        [LoadColumn(5)]
        [ColumnName("temp_min")]
        public float Temp_min;


        [LoadColumn(6)]
        [ColumnName("temp_max")]
        public float Temp_max;
    }
}
