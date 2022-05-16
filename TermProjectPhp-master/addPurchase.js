


const renderPage2 = (text) => {
    document.querySelector('.iconOuterContainer').style.display = 'none';
    document.querySelector('.secondPageAddPurchase').innerHTML = secondPage.content;
    document.querySelector('.page2AddPurchaseHeader').innerHTML = 'Add A Purchase'
    document.querySelector('.categoriesPage2').innerHTML =` Category: ${text}`;
    console.log(text)
    
    ;
}

let secondPage = {
    content: `
                    <h3 class="categoriesPage2 fields"></h3>

                    <div class="fields hidden">
                        <div>Item:</div>
                        <input class="textFields" type="text" name="item" placeholder="Item Name">
                    </div>


                    <div class="fields addPurchaseField">
                        <div>Amount:</div>
                        <input class="textFields" type="number" step="0.01" min="0" name="cost" value="cost" placeholder="$price">
                    </div>


                    <!-- text area-->
                    <div class="text_area_container">
                        <h1 class="formH1">-Note-</h1>
                        <textarea name="purchaseNote" cols="30" rows="10">
                            </textarea>
                    </div>

                    <!-- submit button-->
                    <div class="submit_container">
                        <a href="/addAPurchase.php">
                            <input class="submitButton" type="submit" name="submit">
                        </a>
                    </div>`,

}

let radios = document.getElementsByName('Categories');

let outerIcon = document.querySelectorAll(".iconContainer");

let icons = document.querySelectorAll(".description");

for (let x of outerIcon) {
    x.addEventListener('click', () => {
        for (let j of radios) {
                //console.log(x.lastChild.innerHTML);
            if (x.lastChild.innerHTML === j.value) {
                j.checked = true;
                renderPage2(j.value);
            }
        }

    })

}