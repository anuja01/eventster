import React, { Dispatch, SetStateAction } from "react";
import styled from "styled-components";

const StyledWrapper = styled.div`
  display: flex;
`;
const StyledImage = styled.img`
  width: 400px;
  height: 400px;
`;
const Slider = ({
  showSlider = true,
  setShowSlider,
  image
}: Slider) => {
  return (
    <>
      {showSlider ? (
        <StyledWrapper>
          <StyledImage src={image} />
        </StyledWrapper>
      ) : null}
    </>
  );
};

interface Slider {
  showSlider: boolean;
  setShowSlider: Dispatch<SetStateAction<boolean>>;
  image: string;
}
export default Slider;
