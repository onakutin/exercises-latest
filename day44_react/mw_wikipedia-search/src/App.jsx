import { useEffect, useState } from "react";
import "./App.css";
import SearchBar from "./SearchBar";
import SearchResults from "./SearchResults";

function App() {
	const [searchQuery, setSearchQuery] = useState("");
	const [searchResults, setSearchResults] = useState("");
	const [offset, setOffset] = useState(0);

	const loadData = async () => {
		console.log(offset);
		if (!searchQuery) return;
		const response = await fetch(
			`https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&origin=*&srsearch=${searchQuery}&sroffset=${offset}`
		);
		const data = await response.json();
		setSearchResults(data);
	};
	console.log(searchQuery);

	useEffect(() => {
		loadData();
	}, [offset]);

	return (
		<>
			<SearchBar
				setSearchQuery={setSearchQuery}
				loadData={loadData}
				setOffset={setOffset}
				offset={offset}
			/>
			<SearchResults searchResults={searchResults} />
		</>
	);
}

export default App;
