import "./App.css";
import Article from "./components/Article";

function App() {
	// here I will fetch the data
	const data = [
		{ title: "Article 1", text: "bla bla" },
		{ title: "Article 2", text: "this is the text" },
	];

	return (
		<div>
			<Article title={data[0].title} text={data[0].text} />
			<Article title={data[1].title} text={data[1].text} />
		</div>
	);
}

export default App;
