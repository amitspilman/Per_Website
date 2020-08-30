function prizeCalc() {
  var txt;
  var numberOfPlayers = prompt("Please enter number of players in the contest between 3 to 20", "number of participants   ");
  if(numberOfPlayers == null || numberOfPlayers == "")
  {
    cancelRequest();
  }
  else if(numberOfPlayers<3 || numberOfPlayers>20)
       {
       	 alert ("illeagal number of participants");
         return;
	   }
       else
       {
 			var fee = prompt("Please enter registration fee", "Registration fee here");
  		 	 if (fee == null || fee == "")
  			  {
  		 	 	cancelRequest();
 				}
    			else
  	 			 {
       		         if(fee==0)
         		       {
          			      alert("this compotition has no prize");
           				  return;
          			   }
           			   else{
                      		var total=numberOfPlayers*fee
							calculatePrize(total);
  						 }

    			}
  		}
	}

function cancelRequest(){
	alert("User canceled the request");
}

function calculatePrize(total){
  var txt = "the prize for first place is: " + total*0.5 + "$! \nthe prize for second place is: " + total *0.3+"$! \nthe prize for third place is: "+total*0.2 +"$! \n" ;

   alert(txt);

}
