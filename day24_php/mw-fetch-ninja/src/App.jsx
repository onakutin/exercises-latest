// import "./App.css";
// import { useState, useEffect } from "react";

// function App() {
// 	const [data, setData] = useState(null);
// 	const [dataLoaded, setDataLoaded] = useState(false);
// 	const fetchData = async () => {
// 		const response = await fetch(
// 			"http://www.cbp-exercises.test/exercises-latest/day25_php/mw_simpleAPI/"
// 		);
// 		const responseData = await response.json();
// 		setData(responseData.data);
// 		setDataLoaded(true);
// 	};

// 	useEffect(() => {
// 		fetchData();
// 	}, []);
// 	{
// 		!dataLoaded ? null : console.log(data);
// 	}
// 	return (
// 		<div>{!dataLoaded ? <p>Loading</p> : data.map((e) => <p>{e.fact}</p>)}</div>
// 	);
// }

// export default App;

import { useEffect, useState } from "react";
import "./App.css";
// import catIcon from "./assets/cat-black-face.svg";

function App() {
	const [loading, setLoading] = useState(true);
	const [fact, setFact] = useState(null);

	const loadFact = async () => {
		setLoading(true);

		const response = await fetch(
			"http://www.cbp-exercises.test/exercises-latest/day25_php/mw_simpleAPI/"
		);
		const data = await response.json();

		setLoading(false);
		setFact(data);
	};

	const handleReloadButtonClicked = (ev) => {
		ev.preventDefault();

		loadFact();
	};

	useEffect(() => {
		loadFact();
	}, []);

	return (
		<>
			<h1>Cat fact app</h1>

			<div className="cat-fact">
				{/* {loading ? (
					<div className="cat-fact__loading">
						<img src={catIcon} alt="Cat icon" />
					</div>
				) : (
					""
				)} */}

				{!loading && fact ? <p className="cat-fact__text">{fact.fact}</p> : ""}
			</div>

			<div className="cat-fact__buttons">
				<button
					className="cat-fact__reload"
					onClick={handleReloadButtonClicked}
				>
					Load another
				</button>
			</div>
		</>
	);
}

export default App;
