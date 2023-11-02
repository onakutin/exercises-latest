export default function SearchBar({ loadData, searchQuery, setSearchQuery }) {
	const handleInputChange = (ev) => {
		setSearchQuery(ev.target.value);
	};

	return (
		<>
			<input type="text" value={searchQuery} onInput={handleInputChange} />
			<button onClick={() => loadData()}>Submit</button>
		</>
	);
}
