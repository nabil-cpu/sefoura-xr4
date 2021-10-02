let nama, val;
const url_string = document.URL;
const url = new URL(url_string);
let sender;	

if (url.searchParams.get('by') != null) {
sender = url.searchParams.get('by');
} else {
sender = "Nabil";
}

let footer = document.getElementById("credit");
footer.innerHTML = sender;
footer.href = "";

		

		