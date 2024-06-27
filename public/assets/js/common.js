

function validateAdhaar(event) {
      var input = event.target.value;
      event.target.value = input.replace(/[^0-9]/g, '').substring(0, 12);
  }

function validateMobile(event) {
      var input = event.target.value;
      event.target.value = input.replace(/[^0-9]/g, '').substring(0, 10);
  }

function validateAccountno(event) {
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
}

function validateInteger(event) {
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
}


