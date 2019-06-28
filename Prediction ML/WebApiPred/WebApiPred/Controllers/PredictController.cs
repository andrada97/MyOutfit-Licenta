using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.ML;
using WebApiPred.DataModels;

namespace WebApiPred.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class PredictController : ControllerBase
    {
        private readonly PredictionEnginePool<TempData, TempPrediction> _predictionEnginePool;

        public PredictController(PredictionEnginePool<TempData, TempPrediction> predictionEnginePool)
        {
            _predictionEnginePool = predictionEnginePool;
        }

        [HttpPost]
        public ActionResult<string> Post([FromBody] TempData input)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest();
            }

            TempPrediction prediction = _predictionEnginePool.Predict(input);

            //float temperature = Convert.ToBoolean(prediction.Prediction) ? 1 : 0;


            return Ok(prediction.Score);
        }
    }
}