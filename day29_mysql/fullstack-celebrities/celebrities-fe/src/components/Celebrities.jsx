import { useEffect, useState } from "react";

// function App() {
const Celebrities = () => {
	const [data, setData] = useState([]);

	const fetchData = async () => {
		const response = await fetch(
			"http://www.cbp-exercises.test/exercises-latest/day29_mysql/fullstack-celebrities/api/"
		);
		const responseData = await response.json();
		setData(responseData);
	};

	useEffect(() => {
		fetchData();
	}, []);

	return (
		<>
			<ul>
				{data?.map((celebrity, index) => (
					<li key={index}>
						{celebrity.name}
						<ul>
							{Object.keys(celebrity).map((attribute, index) =>
								attribute !== "name" ? (
									<li key={index}>
										{attribute}: {celebrity[attribute]}
									</li>
								) : (
									""
								)
							)}
						</ul>
					</li>
				))}
			</ul>
		</>
	);
	// console.log(giveItems(person));

	// console.log(giveCelebrityName);
};

// }

export default Celebrities;
