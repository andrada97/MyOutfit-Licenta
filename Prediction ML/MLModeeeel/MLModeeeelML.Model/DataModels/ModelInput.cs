//*****************************************************************************************
//*                                                                                       *
//* This is an auto-generated file by Microsoft ML.NET CLI (Command-Line Interface) tool. *
//*                                                                                       *
//*****************************************************************************************

using Microsoft.ML.Data;

namespace MLModeeeelML.Model.DataModels
{
    public class ModelInput
    {
        [ColumnName("lon"), LoadColumn(0)]
        public float Lon { get; set; }


        [ColumnName("lat"), LoadColumn(1)]
        public float Lat { get; set; }


        [ColumnName("temp"), LoadColumn(2)]
        public float Temp { get; set; }


        [ColumnName("pressure"), LoadColumn(3)]
        public float Pressure { get; set; }


        [ColumnName("humidity"), LoadColumn(4)]
        public float Humidity { get; set; }


        [ColumnName("temp_min"), LoadColumn(5)]
        public float Temp_min { get; set; }


        [ColumnName("temp_max"), LoadColumn(6)]
        public float Temp_max { get; set; }


    }
}
