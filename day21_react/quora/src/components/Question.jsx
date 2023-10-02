const Question = ({ title, question }) => {
	return (
		<>
			<h3 className="question__title">{title}</h3>

			<p className="question__definition">{question}</p>
		</>
	);
};

export default Question;
