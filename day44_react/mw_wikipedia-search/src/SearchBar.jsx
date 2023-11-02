export default function SearchBar({
	loadData,
	setSearchQuery,
	setOffset,
	offset,
}) {
	const handleChange = (ev) => {
		setSearchQuery(ev.target.value);
	};

	const handleNextPage = () => {
		setOffset(offset + 10);
	};

	const handlePreviousPage = () => {
		setOffset(offset - 10);
	};

	return (
		<>
			<input type="text" onChange={handleChange} />
			<button onClick={loadData}> Search</button>
			{offset > 0 ? <button onClick={handlePreviousPage}>PREVIOUS</button> : ""}
			<button onClick={handleNextPage}>NEXT</button>
		</>
	);
}
