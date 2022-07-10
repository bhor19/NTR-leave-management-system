//Get unique values for desired columns

/*{4:["ALWC","ARCC","CASO","CES","CRC","D/OFFICE","DET BWG","DEV LAB","EST","FCRC","FIN","FIRE STN","GE","HQ","IN","IN DIG CELL","LPO","M & R",
"M/CELL","MCO","ME","MFR CELL","MI ROOM","MR","MT","OSS","P & P","PM OFFICE","QM OFFICE","RG","TL","TT CELL","WSG"], 5:[]}*/

function getUniqueValuesFromColumn() {
	
	var unique_col_values_dict={}
	allFilters = document.querySelectorAll(".table-filter")
	
	allFilters.forEach(filter_i=>{
		col_index = filter_i.parentElement.innerHTML;
		alert(col_index)
	});
	
};

//Add option tag to desired columns based on the unique values

//create filter_rows() functions


<script type="text/javascript">
		  $(document).ready(function(){
			 $('#search').keyup(function(){
				search_table($(this).val()); 
			 }); 
			 function search_table(value){
				 $('myTable tr').each(function(){
					var found = 'false';
                    $(this).each(function(){
						if(($this).text().toLowerCase().index(value.toLowerCase())>=0)
						{
							found='true';
						}
					});
                      if(found=='true'){
						  $(this).show();
					  }					
					  else{
						  $(this).hide();
					  }
				 });
				 
			 }
		  });
		  </script>