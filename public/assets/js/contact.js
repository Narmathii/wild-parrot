$(".contactForm").on("submit", function (e) {
  e.preventDefault();

  let form = $(this);

  form.find(".cust-name, .cust-number, .cust-email, .services").css({
    border: "1px solid #ccc",
  });

  let valid = true;

  let name = form.find(".cust-name").val();
  let number = form.find(".cust-number").val();
  let email = form.find(".cust-email").val();
  let service = form.find(".services").val();

  if (name == "") {
    $(".cust-name").css({ border: "1px solid red" });
    valid = false;
  } else if (number == "") {
    $(".cust-number").css({ border: "1px solid red" });
    valid = false;
  } else if (!isPhoneNumber(number)) {
    $(".cust-number").css({ border: "1px solid red" });
    valid = false;
  } else if (email == "") {
    $(".cust-email").css({ border: "1px solid red" });
    valid = false;
  } else if (!IsEmail(email)) {
    $(".cust-email").css({ border: "1px solid red" });
    valid = false;
  } else if (service == "") {
    $(".services").css({ border: "1px solid red" });
    valid = false;
  }

  if (valid) {
    let message =
      "Hii, I am interested in your project.\n\n" +
      "*Name:* " +
      name +
      "\n" +
      "*Number:* " +
      number +
      "\n" +
      "*Email:* " +
      email +
      "\n" +
      "*Service:* " +
      service +
      "\n" +
      "Thank you.";

    let encodedMessage = encodeURIComponent(message);

    let whatsappNumber = "919360842118";

    let isMobile = /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);

    console.log(isMobile);

    let url = isMobile
      ? `whatsapp://send?phone=${whatsappNumber}&text=${encodedMessage}` // open in WhatsApp app
      : `https://web.whatsapp.com/send?phone=${whatsappNumber}&text=${encodedMessage}`; // open in WhatsApp Web

    window.open(url, "_blank");
  }

  $(".cust-name, .cust-number, .cust-email").on("input", function () {
    $(this).css({ border: "1px solid #ccc" });
  });

  $(".services").on("change", function () {
    $(this).css({ border: "1px solid #ccc" });
  });
});

function isPhoneNumber(phone_no) {
  var pattern = /^\d{10}$/;
  return pattern.test(phone_no);
}

function IsEmail(email) {
  var regex =
    /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
