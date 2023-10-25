const loadData = async () => {
	const response = await fetch(
		"https://classes.codingbootcamp.cz/assets/classes/books-api/latest-books.php"
	);

	const data = await response.json();

	console.log(data);
	const listElm = document.querySelector("#latest-books");
	const li = document.createElement("li");

	data.forEach((book) => {
		li.innerHTML = book.title;
		listElm.appendChild(li);
	});
};
data = loadData();
