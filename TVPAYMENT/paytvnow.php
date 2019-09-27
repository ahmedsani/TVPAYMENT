<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>TVPAYMENT</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

</head>
  
<script type="text/javascript">
	function validateForm1()
	{
		var cboPaymentOption = document.Form1.cboPaymentOption;
		var cboMobileNetwork=document.Form1.cboMobileNetwork;
		var cboDataSpeed=document.Form1.cboDataSpeed;
		var cboDataBundle=document.Form1.cboDataBundle;
		var txtAmount=document.Form1.txtAmount;
		var txtDataBundlePhoneNo=document.Form1.txtDataBundlePhoneNo;
		
		var strPaymentOption = cboPaymentOption.value;
		var strMobileNetwork=cboMobileNetwork.value;		
		var strDataSpeed=cboDataSpeed.value;		
		var strDataBundle=cboDataBundle.value;	
		var strAmount=txtAmount.value;
		var strDataBundlePhoneNo=txtDataBundlePhoneNo.value;

		if (strPaymentOption=='-Select-')
		{
			alert('you have omitted the payment option.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";			
			cboPaymentOption.focus();
			return false;
		}
		if(strMobileNetwork=='-Select-')
		{
			alert('you have omitted the data mobile network.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";			
			cboMobileNetwork.focus();
			return false;
		}
		if(strMobileNetwork=='GLO' && strDataSpeed=='-Select-')
		{
			alert('you have omitted the data speed.');
			cboMobileNetwork.focus();document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";				
			return false;
		}						
		if(!strDataBundle)
		{
			alert('you have omitted the data bundle.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";		
			cboDataBundle.focus();
			return false;
		}
		if(!strAmount)
		{
			//alert('you have omitted the amount.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";
			//txtAmount.focus();		
			//return false;
		}					
		if(!strDataBundlePhoneNo)
		{
			alert('you have omitted the mobile number.');document.getElementById("imgLoader").style.visibility = "hidden";document.getElementById("cmdSubmit").style.visibility = "visible";
			txtDataBundlePhoneNo.focus();
			return false;
		}			
	}
	function GetAmount()
	{
		var strDataBundle=document.getElementById('cboDataBundle').value;
		var strDataSpeed=document.getElementById('cboDataSpeed').value;
		var strMobileNetwork=document.getElementById('cboMobileNetwork').value;

		var cboDataBundle=document.getElementById('cboDataBundle');
		cboDataBundle.length=0;

		if (strMobileNetwork=="DSTV")
		{
			document.getElementById('lblDataSpeed').style.display="none";document.getElementById('cboDataSpeed').style.display="none";
					    		    
		    opt = document.createElement('option');
		    opt.value = "1";opt.innerHTML = "DStv Access";
		    cboDataBundle.appendChild(opt);
		   
		    opt = document.createElement('option');
		    opt.value = "2";opt.innerHTML = "DStv Family";
		    cboDataBundle.appendChild(opt);	
		   
		    opt = document.createElement('option');
		    opt.value = "3";opt.innerHTML = "DStv Compact";
		    cboDataBundle.appendChild(opt);

			opt = document.createElement('option');
		    opt.value = "4";opt.innerHTML = "DStv Compact Pluse";
		    cboDataBundle.appendChild(opt);	
			opt = document.createElement('option');
		    opt.value = "5";opt.innerHTML = "DStv Premium";
		    cboDataBundle.appendChild(opt);	
		   
		    opt = document.createElement('option');
		    opt.value = "6";opt.innerHTML = "DStv Premium + HD/Exra View";
		    cboDataBundle.appendChild(opt);
			}
		else if (strMobileNetwork=="Etisalat")
		{		
			//alert('9mobile databundle is currently unavailable as network provider is currently experience a downtime, pls try again later.');			
			document.getElementById('lblDataSpeed').style.display="none";document.getElementById('cboDataSpeed').style.display="none";
			    				
		    
		    //opt = document.createElement('option');
		   // opt.value = "14";opt.innerHTML = "500 MB";
		    //cboDataBundle.appendChild(opt);		    

		   // opt = document.createElement('option');
		   // opt.value = "15";opt.innerHTML = "1 GB";
		   // cboDataBundle.appendChild(opt);
		    
		    //opt = document.createElement('option');
		    //opt.value = "16";opt.innerHTML = "1.5 GB";
		    //cboDataBundle.appendChild(opt);			    	    
		   
		   // opt = document.createElement('option');
		   // opt.value = "17";opt.innerHTML = "2.5 GB";
		   // cboDataBundle.appendChild(opt);		    
		    
		   // opt = document.createElement('option');
		    //opt.value = "18";opt.innerHTML = "4 GB";
		    //cboDataBundle.appendChild(opt);	
		    
		    //opt = document.createElement('option');
		   // opt.value = "19";opt.innerHTML = "5.5 GB";
		   // cboDataBundle.appendChild(opt);		    

		    //opt = document.createElement('option');
		    //opt.value = "20";opt.innerHTML = "11.5 GB";
		    //cboDataBundle.appendChild(opt);		    

		    //opt = document.createElement('option');
		    //opt.value = "21";opt.innerHTML = "15 GB";
		    //cboDataBundle.appendChild(opt);	

		    //opt = document.createElement('option');
		   // opt.value = "22";opt.innerHTML = "27 GB";
		   // cboDataBundle.appendChild(opt);		    	    	    
		}		

		else if (strMobileNetwork=="GOTV")
		{	
			document.getElementById('lblDataSpeed').style.display="none";document.getElementById('cboDataSpeed').style.display="none";
						    				
		    opt = document.createElement('option');
		    opt.value = "1";opt.innerHTML = "GOtv Lite";
		    cboDataBundle.appendChild(opt);	

		    opt = document.createElement('option');
		    opt.value = "2";opt.innerHTML = "GOtv Value";
		    cboDataBundle.appendChild(opt);
		    
		    opt = document.createElement('option');
		    opt.value = "3";opt.innerHTML = "GOtv Plus";
		    cboDataBundle.appendChild(opt);
		    
		    opt = document.createElement('option');
		    opt.value = "4";opt.innerHTML = "GOtv Max";
		    cboDataBundle.appendChild(opt);
		       
		    
		}	
		else if (strMobileNetwork=="STARTIMES")
		{	
			document.getElementById('lblDataSpeed').style.display="none";document.getElementById('cboDataSpeed').style.display="none";
						    				
		    opt = document.createElement('option');
		    opt.value = "1";opt.innerHTML = "SarTimes Nova";
		    cboDataBundle.appendChild(opt);		    	    
		    			
		    opt = document.createElement('option');
		    opt.value = "2";opt.innerHTML = "SarTimes Basic";
		    cboDataBundle.appendChild(opt);
		    
		    opt = document.createElement('option');
		    opt.value = "3";opt.innerHTML = "SarTimes Smart";
		    cboDataBundle.appendChild(opt);		

		    opt = document.createElement('option');
		    opt.value = "4";opt.innerHTML = "SarTimes Classsic";
		    cboDataBundle.appendChild(opt);

		    opt = document.createElement('option');
		    opt.value = "5";opt.innerHTML = "SarTimes Unique";
		    cboDataBundle.appendChild(opt);
		    		    
		    opt = document.createElement('option');
		    opt.value = "6";opt.innerHTML = "SarTimes Super";
		    cboDataBundle.appendChild(opt);		    	    
			
			//if (strDataSpeed=='4G' || strDataSpeed=='-Select-')
			//{
			    opt = document.createElement('option');
			    opt.value = "20";opt.innerHTML = "25 GB";
			    cboDataBundle.appendChild(opt);
			    
			    opt = document.createElement('option');
			    opt.value = "21";opt.innerHTML = "52.5 GB";
			    cboDataBundle.appendChild(opt);
			    
			    opt = document.createElement('option');
			    opt.value = "22";opt.innerHTML = "62.5 GB";
			    cboDataBundle.appendChild(opt);		    			    
			//}
		    
		 }		
		
		GetAmount2();		
	}
	function GetAmount2()
	{
		var strDataBundle=document.getElementById('cboDataBundle').value;
		var strMobileNetwork=document.getElementById('cboMobileNetwork').value;
		
		if (strDataBundle=='1')
		{ 
			if (strMobileNetwork=='DSTV')
				strPrice='2050';
			else if (strMobileNetwork=='GOTV')
				strPrice='450';
			else if (strMobileNetwork=='STARTIMES')
				strPrice='950';
							
		}
		if (strDataBundle=='2')
		{ 
			if (strMobileNetwork=='DSTV')
				strPrice='4050';
			else if (strMobileNetwork=='GOTV')
				strPrice='1300';				
			else if (strMobileNetwork=='STARTIMES')
				strPrice='1350';
			//else if (strMobileNetwork=='GLO')
				//strPrice='';				
		}				 
		if (strDataBundle=='3')
		{ 
			if (strMobileNetwork=='DSTV')
				strPrice='6850';
			else if (strMobileNetwork=='GOTV')
				strPrice='1950';				
			else if (strMobileNetwork=='STARTIMES')
				strPrice='1950';
			//else if (strMobileNetwork=='GLO')
				//strPrice='';				
		}		
		if (strDataBundle=='4') 
		{ 
			if (strMobileNetwork=='DSTV')
				strPrice='10700';
			else if (strMobileNetwork=='GOTV')
				strPrice='3250';				
			else if (strMobileNetwork=='STARTIMES')
				strPrice='2650';
			//else if (strMobileNetwork=='GLO')
				//strPrice='';				
		}	
		if (strDataBundle=='5') 
		{ 
			if (strMobileNetwork=='DSTV')
				strPrice='15850';
			//else if (strMobileNetwork=='GOTV')
				//strPrice='1950';				
			else if (strMobileNetwork=='STARTIMES')
				strPrice='3850';
			//else if (strMobileNetwork=='GLO')
				//strPrice='';					
		}	
		if (strDataBundle=='6') 
		{ 
			if (strMobileNetwork=='DSTV')
				strPrice='18050';
			//else if (strMobileNetwork=='GOTV')
				//strPrice='1950';				
			else if (strMobileNetwork=='STARTIMES')
				strPrice='3850';
			//else if (strMobileNetwork=='GLO')
				//strPrice='';							
		}	
		//if (strDataBundle=='7') 
		{ 
		//	if (strMobileNetwork=='DSTV')
				//strPrice='15850';
			//else if (strMobileNetwork=='GOTV')
				//strPrice='1950';				
			//else if (strMobileNetwork=='STARTIMES')
				//strPrice='3850';
			//else if (strMobileNetwork=='GLO')
				//strPrice='';							
		}
	
	
				
		document.getElementById('txtAmount').value=strPrice;
	}	
</script></head>



<body> <!--class="animsition" style="animation-duration: 1500ms; opacity: 1;"><form action="https://www.clubkonnect.com/Buy.asp" onsubmit="" runat="server" autocomplete="on" method="POST" name="Form1">
-->
<div class="container">
  <form>
    <div class="row">
      <h1>TV PAYMENT</h1>
      <b>
        <h4>CHOOSE WALLET</h4>
      <div class="input-group input-group-icon">
        <input type="text" placeholder="wallet"/>
        <div class="input-icon"><i class="fa fa-envelope"></i></div>
      </div>
      <b>
          <h4>SELECT CABLE BILLER</h4>
      <div class="input-group">
		<select name="cboMobileNetwork" id="cboMobileNetwork" onchange="GetAmount();" onmouseup="GetAmount()" class="form-control" size="1">
		  <option>-Select-</option>		                                            
		   <option value="DSTV">DSTV</option>
		    <option value="GOTV">GOTV</option>
		 <option value="STARTIMES">STARTIMES</option>		                                    
		 </select>
		  </div>
		                            <div class="form-group">
		                                <label class="control-label" for="city" name="lblDataSpeed" id="lblDataSpeed" style="DISPLAY: none;">Data Speed</label>
		                                <select name="cboDataSpeed" id="cboDataSpeed" style="DISPLAY: none;" tabindex="3" onchange="GetAmount();" onmouseup="GetAmount()" class="form-control">
		                                    <!--<option>-Select-</option>-->		                                            
		                                    <option value="3G">3G</option>
		                                    <option value="4G">4G</option>		
		                                </select>
		                            </div>	
		                            <b>
					<h4>PACKAGE/BOUQUET</h4>
					
		                                <select name="cboDataBundle" id="cboDataBundle" tabindex="3" onchange="GetAmount2();" onmouseup="GetAmount2()" class="form-control">
		                                    <option>-Select-</option>		                                            		
		                                </select>
		                            </div>		                            	                            
														 <h4>IUC/DECODER NUMBER</h4>
      <div class="input-group input-group-icon">
																<input name="txtDataBundlePhoneNo" id="txtDataBundlePhoneNo" class="form-control input-md"></textarea>
																<div class="input-icon"><i class="fa fa-phone"></i></div>
																</div>
      <h4>COST OF SUB</h4>
      <div class="input-group input-group-icon">
		                                <input readonly="true" name="txtAmount" id="txtAmount" type="text" class="form-control input-md" disabled="true">
																		<div class="input-icon"><i class="fa fa-money"></i></div>
																	</div>
		                          
																	<h4>PLEASE READ</h4>
      <div class="input-group">
        
        <label for="terms">Please review Phone Number as There is no wallet refond after payment .</label>
      </div>
      <div class="form__actions">
					<button type="submit" class="btn btn--primary" id="submit">VERIFY DECODER/IUC NUMBER</button>
					<div id="feedback" class="form__feedback" aria-live="assertive" role="alert"></div>
				</div>
				<div class="form__actions">
					<button type="submit" class="btn btn--primary" id="submit">PAY</button>
					<div id="feedback" class="form__feedback" aria-live="assertive" role="alert"></div>
				</div>
    </div>
		
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./data_files/jquery.min.js.download"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./data_files/bootstrap.min.js.download"></script>
    <script type="text/javascript" src="./data_files/menumaker.js.download"></script>
    

</form>

</body>
</html>