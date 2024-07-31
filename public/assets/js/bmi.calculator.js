/*--------------------------------------------------
    BMI Calculator
---------------------------------------------------*/
function calculateBMI(){
    var weight = document.bmiCalc.weight.value
    var height = document.bmiCalc.height.value

    if(weight > 0 && height > 0){
        var finalBmi = (weight/(height*height))*10000;
        document.bmiCalc.bmi.value = new Number(finalBmi).toFixed(2)

        if(finalBmi < 18.5){
            document.bmiCalc.meaning.value = "IMC Abaixo do Peso"
        }

        if(finalBmi > 18.5 && finalBmi < 25){
            document.bmiCalc.meaning.value = "IMC Normal"
        }

        if(finalBmi > 25 && finalBmi < 30){
            document.bmiCalc.meaning.value = "IMC Sobrepeso"
        }

        if(finalBmi > 30 && finalBmi < 35){
            document.bmiCalc.meaning.value = "IMC Obeso"
        }

        if(finalBmi > 35){
            document.bmiCalc.meaning.value = "IMC Extremamente Obeso"
        }

    }else{
        alert ("Please fill in all fields.")
    }
}
