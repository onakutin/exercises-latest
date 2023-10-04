import "./App.css";
import Link from "./components/Link";

function App() {
	const data = [
		{
			url: "https://classes.codingbootcamp.cz/coding-bootcamp/autumn-2023/1323-exercise-meeting-state",
			text: "Classes",
		},
		{
			url: "https://github.com/uberVU/react-guide/blob/master/props-vs-state.md",
			text: "GitHub",
		},
		{
			url: "https://teamtreehouse.com/community/shouldnt-chaining-the-selectors-work",
			text: "Chaining",
		},
	];

	return (
		<>
			<Link url={data[0].url} text={data[0].text} />
			<br />
			<Link url={data[1].url} text={data[1].text} />
			<br />
			<Link url={data[2].url} text={data[2].text} />
			<br />
		</>
	);
}

export default App;
