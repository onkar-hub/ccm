<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Add Message</title>
	</head>
	<body>
	<div style="margin:50px 20px; padding:30px 30px; border:#ccc solid 3px;">
	<div style="font-family: Arial, Helvetica, sans-serif;
	font-size:18px;	font-weight: bold; color:black; padding-bottom:20px; padding-left:100px;">Reason For Reject</div>
	
	<?php   $attributes = array('role' => 'form','name' => 'frmdepartadd','onsubmit' => 'return validate();','target' => '_parent');
		    echo form_open_multipart('committee/submitCommitteeContractorReject', $attributes);?>
				
		<table width="100%" border="0" cellpadding="5" cellspacing="5">
			<tr><td width="30%" align="right">Reason Details : &nbsp; </td><td>
			<textarea name="message" id="message" rows="5" cols="30" onchange="return empty(this.id)"></textarea>
			<label id='emessage' class="warning"></label>
			</td></tr>

			<tr><td colspan="2">&nbsp;</td></tr>
			
			<tr><td colspan="2" align="center">
			<input type="hidden" value="<?php echo $ContractorKey;?>" name="ContractorKey">
			<input type="hidden" value="<?php echo $ColumnName;?>" name="ColumnName">
			<input type="hidden" value="<?php echo $ColumnMessage;?>" name="ColumnMessage">
			<input type="hidden" value="Reject" name="flag">
			<input type="submit" value="Reject It" style="width:80px;"></td></tr>
		</table>
	</form>
	</div>
	</body>

<script language="JavaScript">
empty = function (id)
{
	eid = "e" + id;
	var obj = document.getElementById(id).value;

 	if (obj != "")
	{
		document.getElementById(eid).innerHTML = "";
		return;
	}	
	else
	{
		document.getElementById(eid).innerHTML = "Please Enter!";	
		document.getElementById(id).focus();
	}
}

function validate()
{		
		var error = true;
	
		if (document.frmdepartadd.message.value=="")
		{ 
			document.getElementById('emessage').innerHTML = "Please Enter Some Reason for Unapproval";
			document.frmdepartadd.message.focus();
			error =  false;
		}
		
		if (error != true)
		{
		
			return false;
		}
		else
		{
			return true;
		}
}
</script>

</html>