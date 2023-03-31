function createInputs(checkBoxSelected) {
  let value = checkBoxSelected.id;
  let id = checkBoxSelected.value;
  console.log(id);
  console.log(value);

if(checkBoxSelected.checked) {
  
  let roleContent = document.getElementById('roleContent');
  
  let actorBox = document.createElement('div');
  actorBox.classList.add('flex', 'flex-col', 'w-[100%]', 'gap-2');
  actorBox.id ='actorBox_'.id;

  let resultInput = document.createElement('h3');
  resultInput.classList.add('w-[100%]', 'bg-[#5E5E5E]/80', 'rounded-lg');
  resultInput.setAttribute('name', 'textActor');
  resultInput.setAttribute('type', 'text');
  resultInput.setAttribute('id', 'result');
  resultInput.textContent = value;
  

  let roleInput = document.createElement('input');
  roleInput.classList.add('w-[100%]', 'bg-[#5E5E5E]/80', 'rounded-lg');
  roleInput.setAttribute('name', 'roleActor[]');
  roleInput.setAttribute('type', 'text');
  roleInput.setAttribute('id', 'role');
  roleInput.setAttribute('placeholder', 'Mettre un role');

  actorBox.appendChild(resultInput);
  actorBox.appendChild(roleInput);
  roleContent.appendChild(actorBox);


}else {
  document.getElementById('actorBox_'.id).remove();
}



 

  return roleContent;
}

// Category //

function createCategorie(checkBoxSelected) {
  let value = checkBoxSelected.id;
  let id = checkBoxSelected.value;
  console.log(id);
  console.log(value);

if(checkBoxSelected.checked) {
  
  let roleCategory = document.getElementById('roleCategory');
  
  let categoryBox = document.createElement('div');
  categoryBox.classList.add('flex', 'flex-col', 'w-[100%]', 'gap-2');
  categoryBox.id ='categoryBox_'.id;

  let resultInput = document.createElement('h3');
  resultInput.classList.add('w-[100%]', 'bg-[#5E5E5E]/80', 'rounded-lg');
  resultInput.setAttribute('name', 'textCategory');
  resultInput.setAttribute('type', 'text');
  resultInput.setAttribute('id', 'result');
  resultInput.textContent = value;

  categoryBox.appendChild(resultInput);
 
  roleCategory.appendChild(categoryBox);


}else {
  document.getElementById('categoryBox_'.id).remove();
}
  return roleCategory;
}


// Producer //

function createProducer(checkBoxSelected) {
  let value = checkBoxSelected.id;
  let id = checkBoxSelected.value;
  console.log(id);
  console.log(value);

if(checkBoxSelected.checked) {
  
  let roleProducer = document.getElementById('roleProducer');
  
  let producerBox = document.createElement('div');
  producerBox.classList.add('flex', 'flex-col', 'w-[100%]', 'gap-2');
  producerBox.id ='producerBox_'.id;

  let resultInput = document.createElement('h3');
  resultInput.classList.add('w-[100%]', 'bg-[#5E5E5E]/80', 'rounded-lg');
  resultInput.setAttribute('name', 'textProducer');
  resultInput.setAttribute('type', 'text');
  resultInput.setAttribute('id', 'result');
  resultInput.textContent = value;

  producerBox.appendChild(resultInput);
 
  roleProducer.appendChild(producerBox);


}else {
  document.getElementById('producerBox_'.id).remove();
}
  return roleProducer;
}


// Director //

function createDirector(checkBoxSelected) {
  let value = checkBoxSelected.id;
  let id = checkBoxSelected.value;
  console.log(id);
  console.log(value);

if(checkBoxSelected.checked) {
  
  let roleDirector = document.getElementById('roleDirector');
  
  let directorBox = document.createElement('div');
  directorBox.classList.add('flex', 'flex-col', 'w-[100%]', 'gap-2');
  directorBox.id ='directorBox_'.id;

  let resultInput = document.createElement('h3');
  resultInput.classList.add('w-[100%]', 'bg-[#5E5E5E]/80', 'rounded-lg');
  resultInput.setAttribute('name', 'textDirector');
  resultInput.setAttribute('type', 'text');
  resultInput.setAttribute('id', 'result');
  resultInput.textContent = value;

  directorBox.appendChild(resultInput);
 
  roleDirector.appendChild(directorBox);


}else {
  document.getElementById('directorBox_'.id).remove();
}
  return roleDirector;
}