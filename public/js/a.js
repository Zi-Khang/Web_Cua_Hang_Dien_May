//add cart
// const add = document.querySelectorAll(".product-add-cart-btn");
// var addItem = document.querySelector(".them");
// if (addItem !== null) {
//   addItem.addEventListener("click", function () {
//     var product =
//       addItem.parentElement.parentElement.parentElement.parentElement;
//     var itemImg = product.querySelector(".main-img-all").src;
//     var itemName = product.querySelector("h2").innerText;
//     var itemPrice = product.querySelector("b").innerText;
//     addCart(itemImg, itemName, itemPrice);
//   });
// }

// add.forEach(function (button, index) {
//   button.addEventListener("click", function () {
//     var product =
//       button.parentElement.parentElement.parentElement.parentElement
//         .parentElement;
//     var productImg = product.querySelector("img").src;
//     var productName = product.querySelector("h3").innerText;
//     var productPrice = product.querySelector("b").innerText;
//     addCart(productImg, productName, productPrice);
//   });
// });

// function addCart(img, name, price) {
//   var addtr = document.createElement("tr");
//   var cartBody = document.querySelector(".main-cart tbody");
//   var trContent =
//     ' <td class = "first-td"><img src="' +
//     img +
//     '" alt="" />' +
//     name +
//     "</td><td><b>" +
//     price +
//     '</b></td><td><input type="number" value="1" min="0" /></td> <td><div class="delete-cart"><span>Xóa</span></div></td>';
//   addtr.innerHTML = trContent;
//   cartBody.append(addtr);
//   cartTotal();
//   deleteCart();
// }

// function cartTotal() {
//   var cartItem = document.querySelectorAll(".main-cart tbody tr");
//   var totalAll = 0;
//   for (var i = 0; i < cartItem.length; i++) {
//     var itemPrice = cartItem[i].querySelector("b").innerHTML;
//     var inputValue = cartItem[i].querySelector("input").value;
//     var totalItem = itemPrice * inputValue;
//     totalAll = totalAll + totalItem;
//   }
//   var totalPrice = document.querySelector(".total-price b");
//   totalPrice.innerHTML = totalAll;
//   inputChange();
// }

// function inputChange() {
//   var cartQuatity = document.querySelectorAll(".main-cart tbody tr");
//   cartQuatity.forEach(function (input, index) {
//     var inputValue = input.querySelector("input");
//     inputValue.addEventListener("change", function () {
//       cartTotal();
//     });
//   });
// }

// //delete cart
// function onDeleteHandler(button) {
//   var product = button.parentElement.parentElement;
//   product.remove();
//   cartTotal();
// }
// function deleteCart() {
//   var deleteBtn = document.querySelectorAll(".main-cart .delete-cart");
//   deleteBtn.forEach(function (button, index) {
//     button.addEventListener("click", () => {
//       onDeleteHandler(button);
//     });
//   });
// }

//cart-effect
const headerCart = document.querySelector(".header-cart");
const mainCart = document.querySelector(".main-cart");

headerCart.addEventListener("click", function () {
  mainCart.classList.add("active-cart");
});

const quitBtn = document.querySelector("#quit-cart");
quitBtn.addEventListener("click", function () {
  mainCart.classList.remove("active-cart");
});

var btnOpen = document.querySelector('.btnPay');
var modal = document.querySelector('.modal');
var iconClose = document.querySelector('.modal_header i');
// var btnClose = document.querySelector('.modal_footer button');

function toggleModal(){
  modal.classList.toggle('hide');
}

btnOpen.addEventListener('click', toggleModal);
iconClose.addEventListener('click', toggleModal);
// btnClose.addEventListener('click', toggleModal);
modal.addEventListener('click', function(e){
  if (e.target == e.currentTarget)
    toggleModal();
});
