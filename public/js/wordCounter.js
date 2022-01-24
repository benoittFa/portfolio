function wordCounter(text){
    let i = 1;
    var text1, text2, text3, textSplit, fin = false;
    textSplit = text.split('');

    //Appliqué au premier paragraphe
    text1 = textSplit[0];

    while ( i < 900){
        text1 = text1 + textSplit[i];
        i++;
    }

    if(textSplit[900] != ' '){
        while ( textSplit[i] != ' '){
            text1 = text1 + textSplit[i];
            i++;
        }
    }
    document.getElementById('text-biographie-1').innerHTML = text1;

    //Appliqué au second paragraphe
    text2 = textSplit[i];
    i++;
     while ( i < 1400){
        text2 = text2 + textSplit[i];
         i++;
     }
 
     if(textSplit[1400] != ' '){
         while ( textSplit[i] != ' '){
            text2 = text2 + textSplit[i];
             i++;
         }
     }
    document.getElementById('text-biographie-2').innerHTML = text2;

    //Appliqué au troisieme paragraphe
    text3 = textSplit[i];
    i++;
    while (i < textSplit.length){
        if(textSplit[i] == ' ' && textSplit[i-1] == ' ' && textSplit[i-2] == ' '){
            fin == true;
        } 
        text3 = text3 + textSplit[i];
        i++;
        
    }
    document.getElementById('text-biographie-3').innerHTML = text3;

}