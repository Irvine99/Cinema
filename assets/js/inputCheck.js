$(document).ready(function() {
  // Récupération des éléments HTML
  var radioInput = $('input[type=checkbox][name=checkActor]');
  var textInput = $('input[type=text][name=textActor]');

  // Fonction AJAX qui met à jour la valeur de l'input text
  function updateText(value) {
    textInput.val(value);
  }

  // Écouteur d'événement "change" sur l'input radio
  radioInput.change(function() {
    // Récupération de la valeur sélectionnée
    var selectedValue = $('input[type=checkbox][name=checkActor]:checked').val();

    // Appel de la fonction AJAX pour mettre à jour la valeur de l'input text
    updateText(selectedValue);
  });
});


$(document).ready(function() {
  // Récupération des éléments HTML
  var radioInput = $('input[type=checkbox][name=checkProducer]');
  var textInput = $('input[type=text][name=textProducer]');

  // Fonction AJAX qui met à jour la valeur de l'input text
  function updateText(value) {
    textInput.val(value);
  }

  // Écouteur d'événement "change" sur l'input radio
  radioInput.change(function() {
    // Récupération de la valeur sélectionnée
    var selectedValue = $('input[type=checkbox][name=checkProducer]:checked').val();

    // Appel de la fonction AJAX pour mettre à jour la valeur de l'input text
    updateText(selectedValue);
  });
});


$(document).ready(function() {
  // Récupération des éléments HTML
  var radioInput = $('input[type=checkbox][name=checkDirector]');
  var textInput = $('input[type=text][name=textDirector]');

  // Fonction AJAX qui met à jour la valeur de l'input text
  function updateText(value) {
    textInput.val(value);
  }

  // Écouteur d'événement "change" sur l'input radio
  radioInput.change(function() {
    // Récupération de la valeur sélectionnée
    var selectedValue = $('input[type=checkbox][name=checkDirector]:checked').val();

    // Appel de la fonction AJAX pour mettre à jour la valeur de l'input text
    updateText(selectedValue);
  });
});


$(document).ready(function() {
  // Récupération des éléments HTML
  var radioInput = $('input[type=checkbox][name=checkCategory]');
  var textInput = $('input[type=text][name=textCategory]');

  // Fonction AJAX qui met à jour la valeur de l'input text
  function updateText(value) {
    textInput.val(value);
  }

  // Écouteur d'événement "change" sur l'input radio
  radioInput.change(function() {
    // Récupération de la valeur sélectionnée
    var selectedValue = $('input[type=checkbox][name=checkCategory]:checked').val();

    // Appel de la fonction AJAX pour mettre à jour la valeur de l'input text
    updateText(selectedValue);
  });
});

function createInputs() {
  let container = document.getElementById('test');
  container.classList.add('flex','w-[100%]', 'flex-col','justify-center', 'gap-2');

  let resultInput = document.createElement('input');
  resultInput.classList.add('w-[100%]', 'bg-[#5E5E5E]/80', 'rounded-lg');
  resultInput.setAttribute('name', 'textActor');
  resultInput.setAttribute('type', 'text');
  resultInput.setAttribute('id', 'result');

  let roleInput = document.createElement('input');
  roleInput.classList.add('w-[100%]', 'bg-[#5E5E5E]/80', 'rounded-lg');
  roleInput.setAttribute('name', 'roleActor');
  roleInput.setAttribute('type', 'text');
  roleInput.setAttribute('id', 'role');
  roleInput.setAttribute('placeholder', 'Mettre un role');

  let avatarInput = document.createElement('input');
  avatarInput.classList.add('w-[100%]');
  avatarInput.setAttribute('name', 'avatarActor');
  avatarInput.setAttribute('type', 'file');
  avatarInput.setAttribute('id', 'avatar');

  container.appendChild(resultInput);
  container.appendChild(roleInput);
  container.appendChild(avatarInput);

  resultInput.addEventListener('change', () => {
    if (resultInput.checked) {
      // AJAX request for input change
      document.body.appendChild(container);
    } else {
      container.remove();
    }
  });

  roleInput.addEventListener('change', () => {
    if (roleInput.checked) {
      // AJAX request for input change
      document.body.appendChild(container);
    } else {
      container.remove();
    }
  });

  avatarInput.addEventListener('change', () => {
    if (avatarInput.checked) {
      // AJAX request for input change
      document.body.appendChild(container);
    } else {
      container.remove();
    }
  });

  return container;
}
