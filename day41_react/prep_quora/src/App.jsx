import "./App.css";
import Question from "./assets/components/Question.jsx";
import Quote from "./assets/components/Quote";

function App() {
	const quotes = [
		"Get famous. Man up.",
		"Having all your teeth removed should be illegal.",
		"All you need in order to exterminate solitude is a free spirit and a flame.",
		"Turn your back on the past. You can die.",
		"There's no reason not to make politicians realize their ture selves.",
	];

	const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];

	return (
		<>
			<Question />
			<h2>Inspiration:</h2>
			<Quote quote={randomQuote} />
		</>
	);
}

export default App;
