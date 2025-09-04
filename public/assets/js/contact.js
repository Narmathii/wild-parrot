$(".contactForm").on("submit", function (e) {
  e.preventDefault();
  
  $(".cust-name, .cust-number, .cust-email, .services").css({
    border: "1px solid #ccc",
  });

  let valid = true;

  let name = $(".cust-name").val();
  let number = $(".cust-number").val();
  let email = $(".cust-email").val();
  let service = $(".services").val();

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

    window.open(
      `https://wa.me/${whatsappNumber}?text=${encodedMessage}`,
      "_blank"
    );
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


