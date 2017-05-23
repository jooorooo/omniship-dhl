<?php

namespace Dhl\DCTRequestdatatypes\BkgDetailsType;

/**
 * Class representing PiecesAType
 */
class PiecesAType
{

    /**
     * @property \Dhl\DCTRequestdatatypes\PieceType[] $piece
     */
    private $piece = array(
        
    );

    /**
     * Adds as piece
     *
     * @return self
     * @param \Dhl\DCTRequestdatatypes\PieceType $piece
     */
    public function addToPiece(\Dhl\DCTRequestdatatypes\PieceType $piece)
    {
        $this->piece[] = $piece;
        return $this;
    }

    /**
     * isset piece
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPiece($index)
    {
        return isset($this->piece[$index]);
    }

    /**
     * unset piece
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPiece($index)
    {
        unset($this->piece[$index]);
    }

    /**
     * Gets as piece
     *
     * @return \Dhl\DCTRequestdatatypes\PieceType[]
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Sets a new piece
     *
     * @param \Dhl\DCTRequestdatatypes\PieceType[] $piece
     * @return self
     */
    public function setPiece(array $piece)
    {
        $this->piece = $piece;
        return $this;
    }


}

