<?php 
$page = basename($_SERVER['SCRIPT_NAME']);

if ($page == 'index.php'){
    echo "Ivory | Men's Designer Consignment";
    return;
}
else if ($page == 'outerwear.php'){
    echo "Outerwear | Ivory";
    return;
}
else if ($page == 'leather.php'){
    echo "Leather | Outerwear | Ivory";
    return;
}
else if ($page == 'product.php'){
    echo "Ethnic Rider | Leather | Outerwear | Ivory";
    return;
}
else if ($page == 'cart.php'){
    echo "Shopping Cart | Ivory";
    return;
}
else if ($page == 'signin.php'){
    echo "Sign In | Ivory";
    return;
}
else if ($page == 'register.php'){
    echo "Register | Ivory";
    return;
}
else if ($page == 'customer-info.php'){
    echo "Enter Your Information | Checkout | Ivory";
    return;
}
else if ($page == 'payment.php'){
    echo "Payment Details | Checkout | Ivory";
    return;
}
else if ($page == 'confirm.php'){
    echo "Confirm Order | Checkout | Ivory";
    return;
}
else if ($page == 'thanks.php'){
    echo "Order Confirmed! | Ivory";
    return;
}
    
?>