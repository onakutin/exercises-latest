import { useState } from "react";

const Answer = ({ answer }) => {
	const [count, setCount] = useState(0);

	const handleClick = () => {
		setCount(count + 1);
	};

	return (
		<>
			<p>{answer}</p>
			<button onClick={handleClick} type="button">
				like
			</button>
			<p>{count}</p>
		</>
	);
};

export default Answer;
