// **************API de phone *********************

function getIp(callback) {
    fetch('https://ipinfo.io/json?token=<votre token>', { headers: { 'Accept': 'application/json' }})
      .then((resp) => resp.json())
      .catch(() => {
        return {
          country: 'ma',
        };
      })
      .then((resp) => callback(resp.country));
  }
  
  const phoneInputField = document.querySelector("#phone");
  const phoneInput = window.intlTelInput(phoneInputField, {
    initialCountry: "ma",
    geoIpLookup: getIp,
    utilsScript:
      "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
  
  const info = document.querySelector(".alert-info");
  
  function process(event) {
    event.preventDefault();
  
    const phoneNumber = phoneInput.getNumber();
  
    info.style.display = "";
    info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
  }
