// getting all required elements
const searchWrapper = document.querySelector(".searchbar");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");


// if user press any key and release
inputBox.onkeyup = (e)=>{
   let userData = e.target.value;
   let emptyArray = [];
   if(userData){
       emptyArray = suggestions.filter((data)=>{
        // filtering array value and user char to lowercase and return those which start that char
           return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
       });
       emptyArray = emptyArray.map((data)=>{
           return data = '<li>' + data + '<li>';
       });
       console.log(emptyArray);
       searchWrapper.classList.add("active");
       showSuggestions(emptyArray); // show autocomplete
       let allList = suggBox.querySelectorAll('li');
       for(let i = 0; i < allList.length; i++){
           allList[i].setAttribute("onclick", "select(this)");
       }
   } else{
        searchWrapper.classList.remove("active");
   }
   
};

function select(element) {
    let selectUserData = element.textContent;
    inputBox.value = selectUserData;
    selectUserData = "/travelguide/"+element.textContent+"/"+ element.textContent+".html";
    document.getElementById("link2").setAttribute("href",selectUserData);
}

function showSuggestions(list) {
    let listData;
    if(!list.length){
         userValue = inputBox.value;
         listData = '<li>' + userValue + '<li>';
         
    }else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}