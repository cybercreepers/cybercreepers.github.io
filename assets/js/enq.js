$(document).ready(function(){
	var tmt=null,c=0,angles=null,channels=null,coil=null,cr=null,gp=null,gc=null,rounds=null,flats=null,ms=null;
 var arr = [],siz = [];

$('#tmt').change(function(){
  if($('#tmt').is(':checked')){
  $('#tmtsize').show();
  $('#tmtquant').show();
}else{
  $('#tmtsize').hide();
  $('#tmtquant').hide();
}
})

$('#coil').change(function(){
  if($('#coil').is(':checked')){
  $('#coilsize').show();
  $('#coilquant').show();
}else{
  $('#coilsize').hide();
  $('#coilquant').hide();
}
})

$('#angles').change(function(){
  if($('#angles').is(':checked')){
  $('#anglessize').show();
  $('#anglesquant').show();
}else{
  $('#anglessize').hide();
  $('#anglesquant').hide();
}
})

$('#channels').change(function(){
  if($('#channels').is(':checked')){
  $('#channelssize').show();
  $('#channelsquant').show();
}else{
  $('#channelssize').hide();
  $('#channelsquant').hide();
}
})

$('#cr').change(function(){
  if($('#cr').is(':checked')){
  $('#crsize').show();
  $('#crquant').show();
}else{
  $('#crsize').hide();
  $('#crquant').hide();
}
})

$('#gp').change(function(){
  if($('#gp').is(':checked')){
  $('#gpsize').show();
  $('#gpquant').show();
}else{
  $('#gpsize').hide();
  $('#gpquant').hide();
}
})

$('#gc').change(function(){
  if($('#gc').is(':checked')){
  $('#gcsize').show();
  $('#gcquant').show();
}else{
  $('#gcsize').hide();
  $('#gcquant').hide();
}
})

$('#rounds').change(function(){
  if($('#rounds').is(':checked')){
  $('#roundssize').show();
  $('#roundsquant').show();
}else{
  $('#roundssize').hide();
  $('#roundsquant').hide();
}
})

$('#flats').change(function(){
  if($('#flats').is(':checked')){
  $('#flatssize').show();
  $('#flatsquant').show();
}else{
  $('#flatssize').hide();
  $('#flatsquant').hide();
}
})

$('#ms').change(function(){
  if($('#ms').is(':checked')){
  $('#mssize').show();
  $('#msquant').show();
}else{
  $('#mssize').hide();
  $('#msquant').hide();
}
})

  
})