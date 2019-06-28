using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.ML.Data;

namespace WebApiPred.DataModels
{
    public class TempPrediction : TempData
    {
        [ColumnName("PredictedLabel")]
        public float Prediction { get; set; }
        public float Probability { get; set; }
        public float Score { get; set; }
    }
}
