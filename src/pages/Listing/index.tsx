import React from "react";
import Article from "../../components/Article";

const Listing = () => {
  return (
    <>
      <Article test1="test text1" test2={1}/>
      <Article test1="test text2" test2={2}/>
      <Article test1="test text3" test2={3}/>
    </>
  );
};

export default Listing;
