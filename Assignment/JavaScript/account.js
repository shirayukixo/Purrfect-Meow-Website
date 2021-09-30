var myAccountID = ["orders", "points", "addresses", "paymentMethods", "accountDetails"];
    var visibleMyAccountID = null;
    function myAccountIDVisibility(accountID) {
    if(visibleMyAccountID === accountID) {
        visibleMyAccountID = null;
    } else {
        visibleMyAccountID = accountID;
    }
    hideNonVisibleAccountID();
    }
    function hideNonVisibleAccountID() {
    var i, accountID, account;
    for(i = 0; i < myAccountID.length; i++) {
        accountID = myAccountID[i];
        account = document.getElementById(accountID);
        if(visibleMyAccountID === accountID) {
        account.style.display = "block";
        } else {
        account.style.display = "none";
        }
    }
    }