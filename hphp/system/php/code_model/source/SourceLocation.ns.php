<?php
// Copyright 2004-present Facebook. All Rights Reserved.
// This file is @generated by
// fbcode/hphp/facebook/tools/code_model/Generate.sh

namespace HH\CodeModel {

/**
 *  The location in a source file where a code node can be found.
 */
class SourceLocation /*implements ISourceLocation*/ {

  private /*?ISourceFile*/ $sourceFile;
  private /*?int*/ $startLine;
  private /*?int*/ $endLine;
  private /*?int*/ $startColumn;
  private /*?int*/ $endColumn;

  /**
   * The source file containing this location.
   */
  public function getSourceFile() /*: ?ISourceFile*/ {
    return $this->sourceFile;
  }
  /**
   * The source file containing this location.
   */
  public function setSourceFile(/*?ISourceFile*/ $value) /*: this*/ {
    $this->sourceFile = $value;
    return $this;
  }

  /**
   * The 1-based line number where this location starts.
   */
  public function getStartLine() /*: int*/ {
    if ($this->startLine === null) {
      throw new \Exception("StartLine is not initialized");
    }
    return $this->startLine;
  }
  /**
   * The 1-based line number where this location starts.
   */
  public function setStartLine(/*int*/ $value) /*: this*/ {
    $this->startLine = $value;
    return $this;
  }

  /**
   * The 1-based line number where this location end.
   */
  public function getEndLine() /*: int*/ {
    if ($this->endLine === null) {
      throw new \Exception("EndLine is not initialized");
    }
    return $this->endLine;
  }
  /**
   * The 1-based line number where this location end.
   */
  public function setEndLine(/*int*/ $value) /*: this*/ {
    $this->endLine = $value;
    return $this;
  }

  /**
   * The 1-based column in the start line where this location starts.
   */
  public function getStartColumn() /*: int*/ {
    if ($this->startColumn === null) {
      throw new \Exception("StartColumn is not initialized");
    }
    return $this->startColumn;
  }
  /**
   * The 1-based column in the start line where this location starts.
   */
  public function setStartColumn(/*int*/ $value) /*: this*/ {
    $this->startColumn = $value;
    return $this;
  }

  /**
   * The 1-based column in the end line where this location end.
   */
  public function getEndColumn() /*: int*/ {
    if ($this->endColumn === null) {
      throw new \Exception("EndColumn is not initialized");
    }
    return $this->endColumn;
  }
  /**
   * The 1-based column in the end line where this location end.
   */
  public function setEndColumn(/*int*/ $value) /*: this*/ {
    $this->endColumn = $value;
    return $this;
  }

  /**
   * Calls $visitor->visitSourceLocation($this) if
   * such a method exists on $visitor.
   * If not it returns null.
   */
  public function accept(/*mixed*/ $visitor) /*: mixed*/ {
    if (method_exists($visitor, "visitSourceLocation")) {
      // UNSAFE
      return $visitor->visitSourceLocation($this);
    } else {
      return null;
    }
  }

}
}