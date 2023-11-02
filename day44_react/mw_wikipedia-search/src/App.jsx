import { useState } from "react";
import "./App.css";
import SearchBar from "./SearchBar";
import SearchResults from "./SearchResults";

function App() {
	const [searchQuery, setSearchQuery] = useState("");
	const [searchResults, setSearchResults] = useState("");

	const loadData = async () => {
		const response = await fetch(
			"https://en.wikipedia.org/w/api.php?action=query&format=json&list=search&origin=*&srsearch=$" +
				{ searchQuery }
		);
		const data = await response.json();
		setSearchResults(data);
	};

	return (
		<>
			<SearchBar setSearchQuery={setSearchQuery} loadData={loadData} />
			<SearchResults searchResults={searchResults} />
		</>
	);
}

export default App;
