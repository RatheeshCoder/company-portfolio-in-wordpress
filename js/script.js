$(document).ready(function() {
  // Toggle menu on click
  $("#menu-toggler").click(function() {
    toggleBodyClass("menu-active");
  });

  function toggleBodyClass(className) {
    document.body.classList.toggle(className);
  }

 });

 document.addEventListener('DOMContentLoaded', () => {
  const addToCartButton = document.getElementById('add-to-cart');
  const cartCount = document.getElementById('cart-count');
  const increaseQuantityButton = document.getElementById('increase-quantity');
  const decreaseQuantityButton = document.getElementById('decrease-quantity');
  const quantityValue = document.getElementById('quantity-value');
  const quantityRanges = document.querySelectorAll('.quantity-range');
  const popupMessage = document.getElementById('popup-message');

  let quantity = 0;
  let selectedRange = null;
  let cartItemCount = 0;

  // Retrieve the quantity value from localStorage
  const storedQuantity = localStorage.getItem('quantity');
  if (storedQuantity) {
    quantity = parseInt(storedQuantity);
    quantityValue.textContent = quantity;
    updateSelectedRange();
  }

  increaseQuantityButton.addEventListener('click', () => {
    quantity++;
    updateQuantity();
  });

  decreaseQuantityButton.addEventListener('click', () => {
    if (quantity > 0) {
      quantity--;
      updateQuantity();
    }
  });

  function updateQuantity() {
    quantityValue.textContent = quantity;
    updateSelectedRange();
    // Store the updated quantity in localStorage
    localStorage.setItem('quantity', quantity);
  }

  function updateSelectedRange() {
    quantityRanges.forEach((range) => {
      range.classList.remove('selected');
    });

    if (quantity === 0) {
      selectedRange = document.getElementById('quantity-range-1');
    } else if (quantity >= 1 && quantity <= 2) {
      selectedRange = document.getElementById('quantity-range-2');
    } else if (quantity >= 3 && quantity <= 5) {
      selectedRange = document.getElementById('quantity-range-3');
    } else if (quantity >= 6 && quantity <= 10) {
      selectedRange = document.getElementById('quantity-range-4');
    }

    if (selectedRange) {
      selectedRange.classList.add('selected');
    }
  }

  quantityRanges.forEach((range) => {
    range.addEventListener('click', () => {
      quantityRanges.forEach((range) => {
        range.classList.remove('selected');
      });
      range.classList.add('selected');
      selectedRange = range;
      updateQuantity(); // Update the quantity after selecting a range
    });
  });

  addToCartButton.addEventListener('click', () => {
    if (selectedRange) {
      addToCart(selectedRange.textContent);
      showPopupMessage();
      selectedRange = null; // Reset the selected range after adding to cart
    } else {
      // If no range is selected, default to the first range
      selectedRange = document.getElementById('quantity-range-1');
      addToCart(selectedRange.textContent);
      showPopupMessage();
    }
  });

  function addToCart(selectedRange) {
    const quantityToAdd = parseInt(quantityValue.textContent);
    cartItemCount += quantityToAdd;
    cartCount.textContent = cartItemCount;
    console.log(`Item added to cart. Quantity: ${quantityToAdd}. Quantity Range: ${selectedRange}`);
    resetQuantity();
  }

  function resetQuantity() {
    quantity = 0;
    quantityValue.textContent = quantity;
    updateSelectedRange();
    // Remove the quantity value from localStorage
    localStorage.removeItem('quantity');
  }

  function showPopupMessage() {
    popupMessage.style.display = 'block';
    setTimeout(() => {
      popupMessage.style.display = 'none';
    }, 2000); // Hide the message after 2 seconds (adjust as needed)
  }

  // Select the first quantity range by default
  selectedRange = document.getElementById('quantity-range-1');
  selectedRange.classList.add('selected');
  updateQuantity(); // Update the initial quantity

});
