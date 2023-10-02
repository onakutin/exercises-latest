import { useState } from "react";
import "./App.css";
import Term from "./assets/components/Term";

function App() {
	const [count, setCount] = useState(0);

	const data = [
		{
			term: "Antidisestablishmentarianism",
			definition:
				"A political position that developed in 19th-century Britain in opposition to Liberal proposals for the disestablishment of the Church of England—meaning the removal of the Anglican Church's status as the state church of England, Ireland, and Wales. The establishment was maintained in England, but in Ireland, the Church of Ireland (Anglican) was disestablished in 1871. In Wales, four Church of England dioceses were disestablished in 1920 and became the Church in Wales.",
		},
		{
			term: "Anemone",
			definition:
				"This word is so hard to pronounce that it was even featured as a joke in the popular Pixar film Finding Nemo. There are two elements that make the word anemone tricky—the preponderance of M and N sounds and the [ uh-nee ] ending that looks like it should be pronounced like the number one. That said, this word does have a particular rhythm to it that can help you pronounce it correctly: [ uh–nem–uh-nee ].",
		},
		{
			term: "Epitome",
			definition:
				"In words that have been adopted into English from Greek, it is typical to pronounce all of the vowels. This is how we get the pronunciation epitome, from the Greek epitomḗ. Unlike many words in English, the final -e here is not silent; epitome is pronounced [ ih-pit–uh-mee ].",
		},
	];

	const handleClick = () => {
		setCount(count + 1);
	};

	return (
		<>
			<button onClick={handleClick}>`you clicked {count} times`</button>

			<Term term={data[0].term} definition={data[0].definition} />
			<Term term={data[1].term} definition={data[1].definition} />
			<Term term={data[2].term} definition={data[2].definition} />
		</>
	);
}

export default App;
