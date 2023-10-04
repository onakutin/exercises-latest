import { useState } from "react";

export const Likes = () => {
	const [count, setCount] = useState(0);

	const handleClick = () => {
		setCount(count + 1);
	};

	return (
		<>
			<button onClick={handleClick} type="button">
				like
			</button>
			<p>{count}</p>
		</>
	);
};
