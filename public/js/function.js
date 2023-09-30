const urlParams = new URLSearchParams(window.location.search);
const variableValue = urlParams.get('id');

console.log(variableValue);


$("#estudiante_id").live('change', function(){
    alert(this.value)
  });
