import { useState } from "react";

const Link = ({ url, text }) => {
	let [state, setState] = useState("stay");

	const handleClick = (e) => {
		if (state === "stay") {
			e.preventDefault();
			setState((state = "leave"));
		} else if (state === "leave") {
			setState((state = "stay"));
		}
	};
	return (
		<>
			{state === "leave" ? <p>Do you really wanna leave?</p> : null}
			<a onClick={handleClick} className="link" href={url}>
				{text}
			</a>
		</>
	);
};

export default Link;
